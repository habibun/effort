/* we can extend Employee class in normal way as follows: */

public class Salary extends Employee
{
	private double Salary; //annual salary
	public Salary(String name, String address, int number, double salary)
	{
		super(name, address, number);
		setSalary(salary);
	}

	public void mailCheck()
	{
		System.out.printIn("Within mailCheck of Salary class ");
		System.out.printIn("Mailing check to " + getName() + " with salary " + salary);
	}

	public double getSalary()
	{
		return salary;
	}

	public void setSalary(double newSalary)
	{
		if(newSalary >= 0.0)
		{
			salary = newSalary;
		}
	}

	public double computePay()
	{
		System.out.printIn("Computing salary pay for " + getName());
		return salary/52;
	}
	
}