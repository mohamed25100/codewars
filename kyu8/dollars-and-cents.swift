import Foundation

func formatMoney(_ val:Double) -> String {
  let formattedString = String(format: "%.2f", val)
  let replacedString = formattedString.replacingOccurrences(of: ",", with: "")
  return "$\(replacedString)"
}