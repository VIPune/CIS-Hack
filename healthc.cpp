#include "healthc.h"
#include "ui_healthc.h"
#include<QMessageBox>
healthc::healthc(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::healthc)
{
    ui->setupUi(this);
    //ui->statusbar->setStyleSheet("background-color: rgb(171, 235, 198);");
}

healthc::~healthc()
{
    delete ui;
}






void healthc::on_pushButton_clicked()
{


    QMessageBox::StandardButton reply = QMessageBox::question(this, "Query?", "Are you a doctor?",QMessageBox::Yes | QMessageBox::No);
    if(reply== QMessageBox::Yes)
    {
        hide();
        reg2 = new docpatop(this);
        reg2->show();
    }
    else
    {
        hide();
        reg1 = new doctorreg(this);
        reg1->show();
    }
}

