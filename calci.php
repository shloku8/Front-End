<?php
  $num1=10;
  $num2=20;
  $choice=3;
  Switch($choice)
  {
  	case 1:$num1+=$num2;
  	       echo $num1;
  	       break;
  	case 2:$num1-=$num2;
  	       echo $num1;
  	       break;
  	case 3:$num1*=$num2;
  	       echo $num1;
  	       break;
  	case 4:$num1/=$num2;
  	       echo $num1;
  	       break;
  	default:echo "Invalid Choice";
  	       break;
  }  