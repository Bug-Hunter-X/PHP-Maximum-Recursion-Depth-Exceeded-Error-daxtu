# PHP Maximum Recursion Depth Exceeded

This repository demonstrates a common PHP error: exceeding the maximum recursion depth.  The `bug.php` file contains code that recursively processes a deeply nested array, which can lead to a fatal error if the nesting is too deep.  The `bugSolution.php` file shows how to mitigate this issue.

**Problem:**  PHP has a limit on the number of times a function can call itself recursively.  Deeply nested data structures or poorly designed recursive functions can easily exceed this limit, resulting in a fatal error.

**Solution:** Implementing checks for maximum recursion depth or iterating instead of recursing can resolve this problem.  Consider using iterative solutions for handling nested structures when depth is unpredictable.