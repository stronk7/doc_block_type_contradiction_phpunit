# doc_block_type_contradiction_phpunit
To show some strange (for me) behaviour of PSalm and some simple PHPUnit assertions

To reproduce:
```
composer install
vendor/bin/phpunit test.php # Passes.
vendor/bin/psalm # Fails (various)
```

Complete output of `vendor/bin/psalm`:
```
Target PHP version: 8.3 (inferred from current PHP version).
Scanning files...
Analyzing files...



ERROR: DocblockTypeContradiction - test.php:17:16 - Docblock-defined type 0 for $progressBar->getprogress() is never =int(1) (see https://psalm.dev/155)
        $this->assertSame(1, $progressBar->getProgress());


ERROR: DocblockTypeContradiction - test.php:20:16 - Docblock-defined type never for $progressBar->getprogress() is never =int(2) (see https://psalm.dev/155)
        $this->assertSame(2, $progressBar->getProgress());


ERROR: UnevaluatedCode - test.php:22:9 - Expressions after return/throw/continue (see https://psalm.dev/084)
        $progressBar->finish();


ERROR: UnevaluatedCode - test.php:23:9 - Expressions after return/throw/continue (see https://psalm.dev/084)
        $this->assertSame(5, $progressBar->getProgress());


------------------------------
4 errors found
------------------------------

Checks took 0.02 seconds and used 2.231MB of memory
No files analyzed
Psalm was able to infer types for 100% of the codebase

