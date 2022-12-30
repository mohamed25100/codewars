/*
DESCRIPTION:

Kata Task
I have a cat and a dog.

I got them at the same time as kitten/puppy. That was humanYears years ago.

Return their respective ages now as [humanYears,catYears,dogYears]

NOTES:

humanYears >= 1
humanYears are whole numbers only
Cat Years
15 cat years for first year
+9 cat years for second year
+4 cat years for each year after that
Dog Years
15 dog years for first year
+9 dog years for second year
+5 dog years for each year after that
References

http://www.catster.com/cats-101/calculate-cat-age-in-cat-years
http://www.slate.com/articles/news_and_politics/explainer/2009/05/a_dogs_life.html
If you liked this Kata there is another related one here
*/
var humanYearsCatYearsDogYears = function(humanYears) {
    var catYears = humanYears == 1 ? 15 : ( humanYears == 2 ? 24 : 24 + 4*(humanYears-2));
    var dogYears = humanYears == 1 ? 15 : ( humanYears == 2 ? 24 : 24 + 5*(humanYears-2));
    return [humanYears,catYears,dogYears];
  }