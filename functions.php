<?php

function view($templateName, $data = array())
{
  extract($data);
  require 'pages/' . $templateName . '.php';
}