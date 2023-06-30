// What is between?
public class Kata {
    public static int[] between(int a, int b) {
        int size = b - a + 1;
        int[] result = new int[size];
        
        for (int i = 0; i < size; i++) {
            result[i] = a + i;
        }
        return result;
    }
}
