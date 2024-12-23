# PHP Silent Array Out-of-Bounds Access

This repository demonstrates a subtle but potentially problematic behavior in PHP: silent array out-of-bounds access.  When accessing an array element using a numerical index outside the array's bounds, PHP might not throw an error as expected. Instead, it might return the first element or exhibit unexpected behavior depending on how the array is indexed.

The `bug.php` file contains code exhibiting this issue. The `bugSolution.php` file shows how to mitigate this.

This behavior can lead to difficult-to-debug issues in applications. Always validate array indices explicitly to prevent unexpected behavior.