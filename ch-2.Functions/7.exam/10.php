<?php

namespace A;
$closure = function() { echo __NAMESPACE__; };

namespace B;
$closure = function() { echo __NAMESPACE__; };

namespace C;
$closure = function() { echo __NAMESPACE__; };

namespace D;
$closure = function() { echo __NAMESPACE__; };

//use A;
$closure();