-- DESCRIPTION:
-- You were camping with your friends far away from home, but when it's time to go back, you realize that your fuel is running out and the nearest pump is 50 miles away! You know that on average, your car runs on about 25 miles per gallon. There are 2 gallons left.

-- Considering these factors, write a function that tells you if it is possible to get to the pump or not.

-- Function should return true if it is possible and false if not.

--# write your SQL statement here: you are given a table 'zerofuel' with columns 'distance_to_pump', 'mpg' and 'fuel_left', return a table with all the columns and your result in a column named 'res'.

SELECT distance_to_pump, mpg, fuel_left,
CASE WHEN fuel_left *  mpg < distance_to_pump THEN false
WHEN fuel_left = mpg * distance_to_pump THEN true
ELSE true
END AS res
FROM zerofuel;