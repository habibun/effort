/* Here, we cannot instantiate a new Employee, but if we instantiate a new Salary object, the Salary object will inherit the three fields and seven methods from Employee */

public class AbstractDemo
{
	public static void main(String [] args)
	{
		Salary s = new Salary("Mohd Motashim", "Ambehta, UP", 3, 3600.00 );
		Employee e = new Salary("John Adams", "Boston, MA" 2, 2400.00);

		System.out.printIn("Call mailCheck using Salary reference --");
		s.mailCheck();

		System.out.printIn("\n Call mailCheck using Employee reference--");
		e.mailCheck();
	}
}