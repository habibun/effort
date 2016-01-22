/* J03_10.java fibonacci Series */

class J03_10
{
	public static void main(String args [])
	{	
		int f0 = 0, f1 = 1, f;
		
		System.out.println("First 10 Fibonacci Numbers are: \n");
		
		for (int i = 1; i <= 10; i++)
		{
			f = f0+f1;
			
			f1 = f0;
			f0 = f;
			System.out.print(""+f+"");
		}
	}	
}
