/* Searching an item from an array of N numbers using Linear search algorithm */

#include<stdio.h>
//#include<conio.h>


void main()
{
    int data[] = {45,78,35,90,26,45,32,25,80,100};
    int n  = 10, loc = 0, item;

    printf("\n Enter which number do you want to search?:");
    scanf("%d", &item);

    data[n] = item;


    while(data[loc] != item)
    {
        loc++;
    }

    if (loc < n)
    printf("\n The number is in the array \n");

    else

    printf("\n The number is not in the array \n");

//    getch();
}
