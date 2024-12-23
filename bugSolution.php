The best way to avoid this problem is to explicitly check if the key exists before accessing the array element.  This can be achieved using `isset()` or `array_key_exists()`. 

```php
$myArray = ["apple", "banana", "cherry"];
$index = 3;

if (isset($myArray[$index])) {
  echo $myArray[$index];
} else {
  echo "Index out of bounds";
}
```

Alternatively, you can use `array_key_exists()`:

```php
$myArray = ["apple", "banana", "cherry"];
$index = 3;

if (array_key_exists($index, $myArray)) {
  echo $myArray[$index];
} else {
  echo "Index out of bounds";
}
```

By adding these checks, you ensure that your code handles out-of-bounds accesses gracefully and avoids unexpected behavior.