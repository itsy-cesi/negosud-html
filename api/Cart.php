<?php
header('Content-Type: application/json; charset=utf-8');

session_start();

$_SESSION['cart'] = $_SESSION['cart'] ?? array();

if (!isset($_POST['function']))
  die(json_encode(array('error' => 'no function provided')));

switch ($_POST['function'])
{
  case 'delete_item':
    if (!isset($_POST['productId']))
      die(json_encode(array('error' => 'undefined product')));
    if (!isset($_SESSION['cart'][$_POST['productId']]))
      die(json_encode(array('error' => 'product not in cart')));
    $product = $_SESSION['cart'][$_POST['productId']]->nomProduit;
    unset($_SESSION['cart'][$_POST['productId']]);
    die(json_encode(array('success' => $product . ' removed from cart')));
  case 'update_item':
    if (!isset($_POST['productId']))
      die(json_encode(array('error' => 'undefined product')));
    if (!isset($_SESSION['cart'][$_POST['productId']]))
      die(json_encode(array('error' => 'product not in cart')));
    if (!isset($_POST['quantity']))
      die(json_encode(array('error' => 'no quantity provided')));

    $_SESSION['cart'][$_POST['productId']]['quantity'] = $_POST['quantity'];
    if ($_SESSION['cart'][$_POST['productId']]['quantity'] == 0)
    {
      $product = $_SESSION['cart'][$_POST['productId']]['product']->nomProduit;

      unset($_SESSION['cart'][$_POST['productId']]['quantity']);

      die(json_encode(array('success' => $product . ' removed from cart')));
    }
    die();

  case 'add_item':
    if (!isset($_POST['productId']))
      die(json_encode(array('error' => 'undefined product')));
    if (!isset($_POST['quantity']))
      die(json_encode(array('error' => 'no quantity provided')));
    if (!isset($_SESSION['cart'][$_POST['productId']]))
    {
      $ch = curl_init("http://195.154.113.18:8000/api/Produits/" . $_POST['productId']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      $data = json_decode(curl_exec($ch));
      curl_close($ch);
      $_SESSION['cart'][$_POST['productId']] = array('quantity' => $_POST['quantity'], 'product' => $data);
      die(json_encode(array('success' => $data->nomProduit . ' added to cart', 'cart' => $_SESSION['cart'])));
    }
    else
    {
      $_SESSION['cart'][$_POST['productId']]['quantity'] = $_SESSION['cart'][$_POST['productId']]['quantity'] + $_POST['quantity'];
      die(json_encode(array('success' => $data->nomProduit . ' quantity updated', 'cart' => $_SESSION['cart'])));
    }

  case 'get_cart':
    die(
      json_encode(
        array(
          'quantity' => array_sum(array_column($_SESSION['cart'], 'quantity')),
          'cart' => $_SESSION['cart']
        )
      )
    );
  case 'update_cart':
    if (!isset($_POST['productId']))
      die(json_encode(array('error' => 'undefined product')));
    if (!isset($_POST['quantity']))
      die(json_encode(array('error' => 'no quantity provided')));

    $_SESSION['cart'][$_POST['productId']]['quantity'] = $_POST['quantity'];
    if ($_POST['quantity'] > 0)
    {
      die(json_encode(array('success' => $_SESSION['cart'][$_POST['productId']]['product']->nomProduit . ' quantity updated', 'cart' => $_SESSION['cart'], 'quantity' => array_sum(array_column($_SESSION['cart'], 'quantity')))));
    }
    else
    {
      unset($_SESSION['cart'][$_POST['productId']]);
      die(json_encode(array('success' => 'product removed from cart', 'cart' => $_SESSION['cart'], 'quantity' => array_sum(array_column($_SESSION['cart'], 'quantity')))));
    }
}
?>