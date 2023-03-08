/*
Given an array of integers, return a new array with each value doubled.

For example:

[1, 2, 3] --> [2, 4, 6]
*/
func maps(a : Array<Int>) -> Array<Int> {
    // Create a new empty array with the same length as the original array
    var result = [Int](repeating: 0, count: a.count)
    
    // Loop through each element in the original array
    for i in 0..<a.count {
        // Double the value of the current element and add it to the new array
        result[i] = a[i] * 2
    }
    
    // Return the new array with doubled values
    return result
}