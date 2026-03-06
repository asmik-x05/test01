

#include <stdio.h>
#include <stdlib.h>

typedef struct Node {
    int info;
    struct Node *next;
} NodeType;

NodeType *head = NULL;

NodeType *getNode() {
    return (NodeType *)malloc(sizeof(NodeType));
}

void InsertAtPos(int newItem)
{
NodeType *NewNode;
int pos , i ;
printf( " Enter position of a node at which you want to insert a new node" );
scanf( "%d", &pos );
if(head==NULL)
{
printf( "void insertion" );
exit(1);
}
else
{
    NodeType *temp; 
    temp=head;

for(i=1; i<pos-1; i++)
{ 
 temp=temp->next;
}
NewNode=getNode();
NewNode->info=newItem;
NewNode->next=temp->next;
temp->next =NewNode;
 }
}

void display() {
    NodeType *temp = head;
    while(temp != NULL) {
        printf("%d -> ", temp->info);
        temp = temp->next;
    }
    printf("NULL\n");
}
int main() {

    // creating initial list
    NodeType *n1 = getNode();
    NodeType *n2 = getNode();
    NodeType *n3 = getNode();

    n1->info = 10;
    n2->info = 20;
    n3->info = 30;

    head = n1;
    n1->next = n2;
    n2->next = n3;
    n3->next = NULL;
display();
    InsertAtPos(25);

    display();
    return 0;
}