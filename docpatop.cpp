#include "docpatop.h"
#include "ui_docpatop.h"
#include "doctorreg.h"
#include<QPixmap>
#include "databaseconnection.h"
#include <QDebug>
#include <QSqlDatabase>
#include <QSqlQuery>

docpatop::docpatop(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::docpatop)
{
    ui->setupUi(this);
    QPixmap pix(":/img/goll.png");
    int width = ui->label_regis->width();
    int height = ui->label_regis->height();
    ui->label_regis->setPixmap(pix.scaled(width,height,Qt::KeepAspectRatio));

    ui->comboBox_gender->addItem(QIcon(":/img/male.png"),"Male");
    ui->comboBox_gender->addItem(QIcon(":/img/female.png"),"Female");
}

docpatop::~docpatop()
{
    delete ui;
}

void docpatop::on_pushButton_clicked()
{
}


void docpatop::on_pushButton_sumit_clicked()
{
    QString name = ui->lineEdit_name->text();
    QString phone = ui->lineEdit_phone->text();
    QString gender = ui->comboBox_gender->currentText();
    QString email = ui->lineEdit_email->text();
    QString state = ui->lineEdit_state->text();
    QString city = ui->lineEdit_city->text();
    QString aadhar = ui->lineEdit_aadhar->text();
    QString allergies = ui->lineEdit_mjrdis->text();
    QString reginum = ui->lineEdit_regnum->text();
    QString specila = ui->comboBox_spec->currentText();
    QString docornot = "YES";



    DatabaseConnection connection;

    if(connection.Connect())
    {
        qDebug()<<"Connected";
    }

    QSqlQuery query;
    if(query.exec("INSERT INTO registration_table VALUES ('"+name+"',+'"+phone+"','"+gender+"','"+email+"','"+state+"','"+city+"','"+aadhar+"','"+allergies+"','"+docornot+"','"+reginum+"','"+specila+"')"))
    {
        qDebug()<<"Query Executed";
    }

}

