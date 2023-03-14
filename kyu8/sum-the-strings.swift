/*
Create a function that takes 2 integers in form of a string as an input, and outputs the sum (also as a string):

Example: (Input1, Input2 -->Output)

"4",  "5" --> "9"
"34", "5" --> "39"
"", "" --> "0"
"2", "" --> "2"
"-5", "3" --> "-2"
Notes:

If either input is an empty string, consider it as zero.

Inputs and the expected output will never exceed the signed 32-bit integer limit (2^31 - 1)
*/

func sum_str(_ a:String, _ b:String) -> String {
let stringNumberA = a
let stringNumberB = b

var resultA = 0
var resultB = 0

if let intNumberA = Int(stringNumberA) {
  resultA += intNumberA
  print(resultA)
} else {
    print("Invalid integer")
}
  if let intNumberB = Int(stringNumberB) {
  resultB += intNumberB
  print(resultB)
} else {
    print("Invalid integer")
}
  return "\(resultA + resultB)"
}