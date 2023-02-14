/*
Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

Return your answer as a number.
*/
func sumMix(_ arr: [Any]) -> Int {
    var total = 0
    for elem in arr {
        if let num = elem as? Int {
            total += num
        } else if let str = elem as? String, let num = Int(str) {
            total += num
        }
    }
    return total
}