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

void InsertAtBeg(int newItem)
{
    NodeType *NewNode;
    NewNode = getNode();
    NewNode->info = newItem;
    NewNode->next = head;
    head = NewNode;
}

void display() {
    NodeType *temp = head;
    while(temp != NULL) {
        printf("%d -> ", temp->info);
        temp = temp->next;
    }
    printf("NULL\n");
}
void deleteAtSpecificPos()
 {
    NodeType *temp, *p;
    int pos, i;
if(head==NULL)
{
 printf("Empty list");
 return;
}
else 
{
printf("Enter position of a node which you want to delete ");
scanf("%d" , &pos);
temp=head;
for(i=1; i<pos-1; i++)
{
temp=temp->next;
}
p=temp->next;
printf("Deleted item is %d ", p->info);
temp->next =p->next;
free(p);
}}

int main() {
    InsertAtBeg(30);
    InsertAtBeg(20);
    InsertAtBeg(10);
    printf("Before deletion at specific position:\n");
    display();
    deleteAtSpecificPos();
    printf("After deletion at specific position:\n");
    display();
    return 0;
}