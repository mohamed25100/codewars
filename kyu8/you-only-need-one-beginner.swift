/*
You will be given an array a and a value x. All you need to do is check whether the provided array contains the value.

The type of a and x can be String or Int.

Return true if the array contains the value, false if not.
*/
func check<T: Equatable>(_ a: [T], _ x: T) -> Bool {
    // Your code here
  return a.contains(x)
}
