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

void InsertAtEnd(int newItem)
{
NodeType *NewNode;
NewNode=getNode();
NewNode->info=newItem;
NewNode->next=NULL;
if(head==NULL)
{
head=NewNode;
}
else
{
NodeType *temp;
temp=head;
while(temp->next!=NULL)
{
temp=temp->next;
 }
temp->next=NewNode;
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
    InsertAtEnd(30);
    InsertAtEnd(20);
    InsertAtEnd(10);

    display();
    return 0;
}