/*
Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.

Examples (input -> output)
6, "I"     -> "IIIIII"
5, "Hello" -> "HelloHelloHelloHelloHello"
*/

func repeatStr(_ n: Int, _ string: String) -> String {
  // Code here:
  var a = ""
  for i in 0..<n {
    a += "\(string)"
	}
  return a
}