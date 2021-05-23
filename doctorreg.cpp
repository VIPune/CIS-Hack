#include "doctorreg.h"
#include "ui_doctorreg.h"
#include<QPixmap>
#include "databaseconnection.h"
#include <QDebug>
#include <QSqlDatabase>
#include <QSqlQuery>
doctorreg::doctorreg(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::doctorreg)
{
    ui->setupUi(this);
    QPixmap pix(":/img/goll.png");
    int width = ui->label_regis->width();
    int height = ui->label_regis->height();
    ui->label_regis->setPixmap(pix.scaled(width,height,Qt::KeepAspectRatio));

    ui->comboBox_gender->addItem(QIcon(":/img/male.png"),"Male");
    ui->comboBox_gender->addItem(QIcon(":/img/female.png"),"Female");

//    DatabaseConnection con;

//    if(con.Connect()){
//        qDebug() <<"Connected";
//        //ui->statusLabel->setText("Connected");
//    }
//    //else ui->statusLabel->setText("Cannot Connect");


//    con.Disconnect();


}

doctorreg::~doctorreg()
{
    delete ui;
}







void doctorreg::on_pushButton_sumit_clicked()
{
    QString name = ui->lineEdit_name->text();
    QString phone = ui->lineEdit_phone->text();
    QString gender = ui->comboBox_gender->currentText();
    QString email = ui->lineEdit_email->text();
    QString state = ui->lineEdit_state->text();
    QString city = ui->lineEdit_city->text();
    QString aadhar = ui->lineEdit_aadhar->text();
    QString allergies = ui->lineEdit_mjrdis->text();




    DatabaseConnection connection;

    if(connection.Connect())
    {
        qDebug()<<"Connected";
    }

    QSqlQuery query;
    if(query.exec("INSERT INTO registration_table VALUES ('"+name+"',+'"+phone+"','"+gender+"','"+email+"','"+state+"','"+city+"','"+aadhar+"','"+allergies+"','NULL','NULL','NULL')"))
    {
        qDebug()<<"Query Executed";
    }


    connection.Disconnect();

}



void doctorreg::on_pushButton_docyes_clicked()
{



}

