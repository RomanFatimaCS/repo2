<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>

  <!-- ============================================
       SECTION 1: CSS STYLING START
       ============================================ -->
  <style>
    /* ---------- Reset ---------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Arial, sans-serif;
    }

    /* ---------- Body ---------- */
    body {
      background: linear-gradient(135deg, #e3f2fd, #bbdefb);
      min-height: 100vh;
      padding: 30px;
    }

    /* ---------- Container ---------- */
    .container {
      max-width: 950px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    /* ---------- Header ---------- */
    h1 {
      text-align: center;
      color: #1565c0;
      margin-bottom: 5px;
      font-size: 32px;
    }

    .subtitle {
      text-align: center;
      color: #888;
      font-size: 14px;
      margin-bottom: 25px;
    }

    /* ---------- Form ---------- */
    .form-box {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr auto;
      gap: 10px;
      margin-bottom: 20px;
    }

    .form-box input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .form-box button {
      padding: 10px 20px;
      background: #1565c0;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .form-box button:hover {
      background: #0d47a1;
    }

    /* ---------- Search ---------- */
    .search-box {
      margin-bottom: 15px;
    }

    .search-box input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    /* ---------- Table ---------- */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 15px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    th {
      background: #1565c0;
      color: #fff;
    }

    tr:hover {
      background: #e3f2fd;
    }

    /* ---------- Buttons ---------- */
    .issue-btn {
      background: #43a047;
      color: #fff;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 5px;
    }

    .issue-btn:hover { background: #2e7d32; }

    .delete-btn {
      background: #e74c3c;
      color: #fff;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    .delete-btn:hover { background: #c0392b; }

    /* ---------- Status ---------- */
    .available { color: #2e7d32; font-weight: bold; }
    .issued { color: #c62828; font-weight: bold; }

    /* ---------- Stats ---------- */
    .stats {
      display: flex;
      justify-content: space-around;
      margin-top: 25px;
      padding: 15px;
      background: #e3f2fd;
      border-radius: 8px;
    }

    .stats div { text-align: center; }

    .stats h3 {
      color: #1565c0;
      font-size: 24px;
    }

    .stats p {
      color: #666;
      font-size: 13px;
    }

    /* ---------- Footer ---------- */
    .footer {
      text-align: right;
      font-weight: bold;
      color: #1565c0;
      margin-top: 10px;
    }
  </style>
  <!-- ============================================
       SECTION 1: CSS STYLING END
       ============================================ -->

</head>
<body>

  <!-- ============================================
       SECTION 2: MAIN CONTAINER START
       ============================================ -->
  <div class="container">

    <!-- ============================================
         SECTION 2.1: HEADER
         ============================================ -->
    <h1>Library Management System</h1>
    <p class="subtitle">Student: Your Name | Reg No: 2022-GWG-1076</p>

    <!-- ============================================
         SECTION 2.2: ADD BOOK FORM
         ============================================ -->
    <div class="form-box">
      <input type="text" id="bname" placeholder="Book Name">
      <input type="text" id="bauthor" placeholder="Author">
      <input type="text" id="bcat" placeholder="Category">
      <button onclick="addBook()">Add Book</button>
    </div>

    <!-- ============================================
         SECTION 2.3: SEARCH BOX
         ============================================ -->
    <div class="search-box">
      <input type="text" id="search" placeholder="Search book..." oninput="searchBook()">
    </div>

    <!-- ============================================
         SECTION 2.4: BOOKS TABLE
         ============================================ -->
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Book</th>
          <th>Author</th>
          <th>Category</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <!-- Data JavaScript se aayega -->
      </tbody>
    </table>

    <!-- ============================================
         SECTION 2.5: TOTAL COUNT
         ============================================ -->
    <p class="footer" id="total">Total Books: 0</p>

    <!-- ============================================
         SECTION 2.6: STATS BOX
         ============================================ -->
    <div class="stats">
      <div>
        <h3 id="totalStat">0</h3>
        <p>Total Books</p>
      </div>
      <div>
        <h3 id="availStat">0</h3>
        <p>Available</p>
      </div>
      <div>
        <h3 id="issueStat">0</h3>
        <p>Issued</p>
      </div>
    </div>

  </div>
  <!-- ============================================
       SECTION 2: MAIN CONTAINER END
       ============================================ -->

  <!-- ============================================
       SECTION 3: JAVASCRIPT START
       ============================================ -->
  <script>

    /* ---------- 3.1: Books Data Array ---------- */
    let books = [
      { name: "Clean Code", author: "Robert Martin", cat: "Programming", status: "Available" },
      { name: "Rich Dad Poor Dad", author: "Robert Kiyosaki", cat: "Finance", status: "Issued" },
      { name: "The Alchemist", author: "Paulo Coelho", cat: "Novel", status: "Available" }
    ];

    /* ---------- 3.2: Page Load ---------- */
    window.onload = function () {
      renderTable();
    };

    /* ---------- 3.3: Add Book Function ---------- */
    function addBook() {
      let name = document.getElementById("bname").value.trim();
      let author = document.getElementById("bauthor").value.trim();
      let cat = document.getElementById("bcat").value.trim();

      if (name === "" || author === "" || cat === "") {
        alert("Please fill all fields!");
        return;
      }

      books.push({ name: name, author: author, cat: cat, status: "Available" });

      document.getElementById("bname").value = "";
      document.getElementById("bauthor").value = "";
      document.getElementById("bcat").value = "";

      renderTable();
    }

    /* ---------- 3.4: Render Table Function ---------- */
    function renderTable() {
      let tbody = document.getElementById("tableBody");
      tbody.innerHTML = "";

      books.forEach((b, index) => {
        let statusClass = b.status === "Available" ? "available" : "issued";
        let row = `
          <tr>
            <td>${index + 1}</td>
            <td>${b.name}</td>
            <td>${b.author}</td>
            <td>${b.cat}</td>
            <td class="${statusClass}">${b.status}</td>
            <td>
              <button class="issue-btn" onclick="toggleStatus(${index})">Toggle</button>
              <button class="delete-btn" onclick="deleteBook(${index})">Delete</button>
            </td>
          </tr>
        `;
        tbody.innerHTML += row;
      });

      document.getElementById("total").innerText = "Total Books: " + books.length;
      updateStats();
    }

    /* ---------- 3.5: Toggle Status Function ---------- */
   
    }

    /* ---------- 3.6: Delete Book Function ---------- */
    function deleteBook(index) {
      if (confirm("Delete this book?")) {
        books.splice(index, 1);
        renderTable();
      }
    }
        <!-- ============================================
         SECTION 2.7: MEMBERS SECTION (NEW PART)
         ============================================ -->
    <div class="members-section">
      <h2>Library Members</h2>

      <div class="member-input">
        <input type="text" id="memName" placeholder="Member Name">
        <input type="text" id="memReg" placeholder="Reg No (2022-GWG-1076)">
        <button onclick="addMember()">Add Member</button>
      </div>

      <div class="member-list" id="memberList">
        <!-- Members JavaScript se aayenge -->
      </div>
    </div>

    /* ---------- 3.7: Search Function ---------- */
   

    /* ---------- 3.8: Update Stats Function ---------- */
    function updateStats() {
      let avail = books.filter(b => b.status === "Available").length;
      let issued = books.filter(b => b.status === "Issued").length;

      document.getElementById("totalStat").innerText = books.length;
      document.getElementById("availStat").innerText = avail;
      document.getElementById("issueStat").innerText = issued;
    }

    /* ---------- 3.9: Console Info ---------- */
    console.log("Library Management System Loaded");
    console.log("Reg No: 2022-GWG-1076");

  </script>
  <!-- ============================================
       SECTION 3: JAVASCRIPT END
       ============================================ -->

</body>
</html>