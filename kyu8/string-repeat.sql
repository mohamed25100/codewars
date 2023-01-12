--# write your SQL statement here: you are given a table 'repeatstr' with columns 'n' and 's', return a table with all columns and your result in a column named 'res'.
-- DESCRIPTION:
-- Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.

-- Examples (input -> output)
-- 6, "I"     -> "IIIIII"
-- 5, "Hello" -> "HelloHelloHelloHelloHello"

SELECT s, n, REPEAT(s, n) AS res FROM repeatstr;