/*
Grade book
Complete the function so that it finds the average of the three scores passed to it and returns the letter value associated with that grade.

Numerical Score	Letter Grade
90 <= score <= 100	'A'
80 <= score < 90	'B'
70 <= score < 80	'C'
60 <= score < 70	'D'
0 <= score < 60	'F'
Tested values are all between 0 and 100. Theres is no need to check for negative values or values greater than 100.
*/
func getGrade(_ s1: Int, _ s2: Int, _ s3: Int) -> String {
  // Code here
  var score = (s1 + s2 + s3) / 3
  switch score {
case 90...100:
    return "A"
case 80...90:
    return "B"
case 70...80:
    return "C"
case 60...70:
    return "D"
default:
    return "F"
}
}