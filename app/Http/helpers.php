<?php

  function checkPermission($permissions){
    return (auth()->user()->role == $permissions);
  }

  ?>

