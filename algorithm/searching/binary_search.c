#include <stdlib.h>
#include<stdio.h>
//#include<conio.h>  not work's in linux
#include <curses.h>     //replacement of conio
#define size 10

void main()
{
    int data[size] = {12, 23, 34, 45, 56, 76, 89, 98, 100, 145};
    int item, beg = 0, end = size - 1, mid;
    char ch;

    mid = (int)((beg + end)/2);

    start:

    printf("\nEnter which number do you search ? ");
    scanf("%d", &item);

    while(beg < end && item != data[mid]){
        if(item < data[mid])
            end = mid -1;
        else
            beg = mid + 1;
        mid = (int)((beg+end)/2);
    }

    if(data[mid] == item){
        printf("\nThe item is in the array at location : %d", mid);
    }
    else
        printf("\nThe item is not in the array");

    printf("\n\nDo you want to continue(y/n):");
    ch = getch();

    if(ch == 'Y' || ch == 'Y')
        goto start;
    else
        exit(0);
    getch();

}