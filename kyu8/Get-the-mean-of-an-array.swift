/*
It's the academic year's end, fateful moment of your school report. The averages must be calculated. All the students come to you and entreat you to calculate their average for them. Easy ! You just need to write a script.

Return the average of the given array rounded down to its nearest integer.

The array will never be empty.
*/
func getAverage(_ marks: [Int]) -> Int { 
  var b = 0
  for i in 0..<marks.count{
    b += marks[i]
  }
  return Int(b / marks.count)
}