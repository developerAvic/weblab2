
### 2. Database Creation Schema
To execute the **Student Information Form**, launch your local SQL terminal or open `phpMyAdmin` and run the following queries:

```sql
CREATE DATABASE student_db;
USE student_db;

CREATE TABLE student_info (
    usn VARCHAR(20) PRIMARY KEY,
    name VARCHAR(100),
    branch VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(15)
);
```

### 3. Local Mock Data Setup for AJAX Component
For the **AJAX Web Page** (`ajax_demo.html`) to successfully query and render data without triggering local file system restrictions (CORS errors), save the following placeholder data objects directly within your working folder:

*   **`data.txt`**: `Hello from data.txt! This text was loaded using plain JavaScript AJAX.`
*   **`data1.txt`**: `Hello from data1.txt! This text was loaded using jQuery AJAX.`
*   **`data.json`**:
    ```json
    {
        "name": "John Doe",
        "branch": "Computer Science",
        "college": "XYZ Institute",
        "year": "2026"
    }
    ```
