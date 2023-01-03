<?php
public function generateToken($length = 10){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  $charactersLength = strlen($characters);
  $token = '';
  for ($i = 0; $i < $length; $i++) {
      $token .= $characters[rand(0, $charactersLength - 1)];
  }

  return $token;
}
