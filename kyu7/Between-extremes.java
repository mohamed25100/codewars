/*
 * Given an array of numbers, return the difference between the largest and smallest values.

For example:

[23, 3, 19, 21, 16] should return 20 (i.e., 23 - 3).

[1, 434, 555, 34, 112] should return 554 (i.e., 555 - 1).

The array will contain a minimum of two elements. Input data range guarantees that max-min will cause no integer overflow.

 */
public class Kata
{
  public static int betweenExtremes(int[] numbers)
  {
    int min = numbers[0]; // Assume the first number is the minimum
    int max = numbers[0]; // Assume the first number is the maximum

    // Iterate through the array to find the actual minimum and maximum
    for (int i = 1; i < numbers.length; i++) {
        if (numbers[i] < min) {
            min = numbers[i]; // Update the minimum if a smaller number is found
        }
        if (numbers[i] > max) {
            max = numbers[i]; // Update the maximum if a larger number is found
        }
    }

    return max - min; // Return the difference between the maximum and minimum
  }
}