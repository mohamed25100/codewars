/*
Write a method, that will get an integer array as parameter and will process every number from this array.

Return a new array with processing every number of the input-array like this:

If the number has an integer square root, take this, otherwise square the number.

Example
[4,3,9,7,2,1] -> [2,9,3,49,4,1]
Notes
The input array will always contain only positive numbers, and will never be empty or null.
*/
import Foundation

func squareOrSquareRoot(_ input: [Int]) -> [Int] {

    var result = [Int]()
    for num in input {
        let sqrt = Int(Double(num).squareRoot())
        if sqrt * sqrt == num {
            result.append(sqrt)
        } else {
            result.append(num * num)
        }
    }
    return result
}