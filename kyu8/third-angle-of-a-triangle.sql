--DESCRIPTION:
-- You are given two interior angles (in degrees) of a triangle.

-- Write a function to return the 3rd.

--Note: only positive integers will be tested.

-- https://en.wikipedia.org/wiki/Triangle


--# write your SQL statement here: 
-- you are given a table 'otherangle' with columns 'a' and 'b'.
-- return a table with these columns and your result in a column named 'res'.
SELECT a,b, 180 - (a+b) AS res FROM otherangle;