/* J03_07 Another Example of switch statements */

import java.io.*;

class J03_07
{
	public static void main (String args [])
	{
		DataInputStream in = new DataInputStream (System. in);
		char ch;
		System.out.print("Enter A or a And Borb:");
		
		try {
				switch (ch = (char)System.in.read())
				{
					case 'A':
					System.out.print("You have entered: A"); break;
					case 'a':
					System.out.print("You have entered: a"); break;
					case 'B':
					System.out.print("You have entered: B"); break;
					case 'b':
					System.out.print("You have entered: b"); break;
					default:
					System.out.print("You have entered wrong character:");
				}
			}
			catch(Exception e){}
	}
}
