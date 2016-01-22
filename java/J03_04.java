/* Example of Conditional Operator */

class J03_04
{
	public static void main (String args[])
	{
		int a,b;
		a = 10;
		b = 20;
		int result;
		
		System.out.println("a="+a);
		System.out.println("b="+b);
		result =(a > b) ? a:b;
		System.out.println("\nMaximum of " +a+" and " +b+ " is: "+ result);
	}
}
