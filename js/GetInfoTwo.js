import mysql from "mysql";
function getInfoTwo() {
  var con = mysql.createConnection({
    host: database.host,
    user: database.user,
    password: database.password,
    database: database.database,
    supportBigNumbers: database.supportBigNumbers,
    bigNumberStrings: database.bigNumberStrings,
  });
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  console.log(username);

  if (!username)
    return function getInfoTree() {
      open("../LoginWebsite/../html/../CreateAccount/CreateAccount.html");
    };

  if (!password)
    return function getInfoTree() {
      open("../html/../CreateAccount/CreateAccount.html");
    };

  con.query(
    `SELECT all FROM AllAccountInfo WHERE username = '${username}'`,
    (err, rows) => {
      if (err) throw err;
      console.log(rows);
      if (rows.length > 0) {
        for (let i = 0; i < rows.length; i++) {
          let name = rows[i].name;
          let lastName = rows[i].lastName;
          let username = rows[i].username;
          let email = rows[i].email;
          let password = rows[i].password;
        }
        return con.destroy();
      }
    }
  );
}
