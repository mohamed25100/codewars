--Write your SQL statement here--
SELECT number, CASE  WHEN number % 2 = 0 THEN 'Even' ELSE 'Odd' END AS is_even FROM numbers