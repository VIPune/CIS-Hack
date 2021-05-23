#include "databaseconnection.h"
#include <qdebug.h>
DatabaseConnection::DatabaseConnection()
{
    dataBase = QSqlDatabase::addDatabase("QSQLITE");
    dataBase.setDatabaseName(":/img/registration.db");
}
bool DatabaseConnection::Connect()
{
    if(dataBase.open())
        return true;
    else return false;

}
void DatabaseConnection::Disconnect()
{
    dataBase.close();
}
