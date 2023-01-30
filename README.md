### How to make use of this function 😅  
1. Copy all the codes from dump.php  
2. Within your current directory, create a dump.php file and then paste the codethat you copied from dump.php repository  
3. Use include method to import the newly created dump file  
Ex.  
```php
  // import dump.php file  
  include('dump.php');  

  // to use the function  
  dump($arr1);  

  // you can pass up to two params inside this function  
  dump($arr1, $someVars)  
```  

Since we are using the method var_dump(), you can pass in whatever datatypes you can think of inside this dump() function.  

😁  
