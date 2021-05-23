#ifndef DATABASECONNECTION_H
#define DATABASECONNECTION_H
#include<QSqlDatabase>

class DatabaseConnection
{
private:
    QSqlDatabase dataBase;

public:
    DatabaseConnection();
    bool Connect();
    void Disconnect();
};

#endif // DATABASECONNECTION_H
