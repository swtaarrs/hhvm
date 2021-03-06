<?hh

function tupleProvider((function ((int, int)...): void) $fn):void {
  $fn(
    tuple(1, 2),
    tuple(1, 3),
    tuple(5, 6),
  );
}

print "Tuple provider ...\$x\n";
tupleProvider((...$x) ==> {
  var_dump($x);
});

print "Tuple provider (int, int)...\$x\n";
tupleProvider(((int, int) ...$x) ==> {
  var_dump($x);
});

print "Tuple provider ...\n";
tupleProvider((...) ==> {
  var_dump(func_get_args());
});

print "Tuple provider lambda1\n";
$lambda1 = ((int, int)... $x) ==> {
  var_dump($x);
};

tupleProvider($lambda1);

print "Tuple provider lambda2\n";
$lambda2 = (...$x) ==> {
  var_dump($x);
};

tupleProvider($lambda2);
