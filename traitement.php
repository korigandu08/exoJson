<?php

if (!empty($_POST))
{
  if (empty($_POST['pizza']))
  {
    $message = "Commande!";
  } else {
    $commande = array('olive'=>$_POST['olive'],'tomate'=>$_POST['tomate'],'mozzarella'=>$_POST['mozzarella']);
    $options = json_encode($commande);
    $menu = $_POST['pizza'];
    $message = "Choisir".$_POST['pizza'].', ';
    $options = json_decode($options);

    foreach ($options as $option)
    {
      if ($option) $message .= ' '.$option.',';
    }
  }
}

?>