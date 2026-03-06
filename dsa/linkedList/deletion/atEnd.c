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
void deleteEnd()
 {
NodeType *temp;
if(head==NULL)
{
 printf("Empty list");
 return;
}
else if(head->next==NULL)
{
temp=head;
head=NULL;
printf("Deleted item is %d", temp->info);
free(temp);
}
else
{
temp=head;
while(temp->next->next!=NULL)
{
temp=temp->next;
}
printf("deleted item is %d" , temp->next->info);
free(temp->next);
temp->next=NULL;
}
 }
int main() {
    InsertAtBeg(30);
    InsertAtBeg(20);
    InsertAtBeg(10);
    printf("Before deletion at end:\n");
    display();
    deleteEnd();
    printf("\nAfter deletion at end:\n");
    display();
    return 0;
}