/*
Write function bmi that calculates body mass index (bmi = weight / height2).

if bmi <= 18.5 return "Underweight"

if bmi <= 25.0 return "Normal"

if bmi <= 30.0 return "Overweight"

if bmi > 30 return "Obese"
*/
func bmi(_ weight: Int, _ height: Double) -> String {
   	let bmi = Double(weight) / Double(height * height)
  switch bmi {
case 0...18.5:
    return("Underweight")
case 18.5...25.0:
    return("Normal")
case 25.0...30.0:
    return("Overweight")
default:
    return("Obese")
}
}