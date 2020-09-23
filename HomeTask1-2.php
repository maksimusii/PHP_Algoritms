<?php
class HomeTask1 {
  

  const test_number = 600851475143;

  const test_str = '"Это тестовый вариант проверки (задачи со скобками). И вот еще скобки: {[][()]}"';
  
    function test() {

    //Задание 1. Проверить баланс скобок в выражении, игнорируя любые внуренние символы. В решении по возможности испольщовать SplStack
      $bracketSymbol = ' {}[]()""';
      $symbolStack = new SplStack();
      $symbol = str_split(self::test_str);

      for ($i=0; $i < strlen(self::test_str); $i++) {

        $iSymbol = strpos($bracketSymbol, $symbol[$i]);

        if ($iSymbol % 2 && $symbol[$i] != " " ) {
          if ($symbolStack->count() && $symbolStack->top() == '"' && $symbol[$i]  == '"') {
            $symbolStack->pop();
          } else {
            $symbolStack->push($symbol[$i]);
          }
        } elseif ($symbolStack->count() && strpos($bracketSymbol, $symbolStack->top().$symbol[$i]) != 0) {
            $symbolStack->pop();
        } 
        
      }
      if(!($symbolStack->count())) {
        echo "Тест пройден";
        echo PHP_EOL;
      } else {
        echo "Тест непройден";
        echo PHP_EOL;
      }
      //Задание 2. Простые делители числа 13195 - это 5, 7, 13 и 29. Каков самый большой делитель числа 600851475143, являющийся простым числом? 
      $n = self::test_number;
      for($i = 2; $i <= $n / $i; $i++){
        while($n % $i == 0) {
          $n = $n / $i;
        }
        }
        echo 'Cамым большым простым делителем числа 600851475143 является простое число ' . $n;
        echo PHP_EOL;

        
    }

    
  
}
$start = microtime(true);
$before = memory_get_usage();

$test = new HomeTask1;
$test->test();
echo microtime(true) - $start;
echo PHP_EOL;
echo memory_get_usage() - $before;
echo PHP_EOL;