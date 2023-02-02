/*
Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.

Examples:
Input: 42145 Output: 54421

Input: 145263 Output: 654321

Input: 123456789 Output: 987654321
*/
func descendingOrder(of number: Int) -> Int {
let numbers = splitDigits(of: number)
let sortedNumbers = sortArrayDescending(array: numbers)
  return convertArrayToNumber(array: sortedNumbers)
}
func splitDigits(of number: Int) -> [Int] {
    return String(number).compactMap { Int(String($0)) }
}
func sortArrayDescending(array: [Int]) -> [Int] {
    return array.sorted(by: >)
}
func convertArrayToNumber(array: [Int]) -> Int {
    return array.reduce(0) { $0 * 10 + $1 }
}