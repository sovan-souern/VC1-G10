<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Profile Settings</h4>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <?php 
                    echo $_SESSION['error']; 
                    unset($_SESSION['error']);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form action="/updateProfile" method="POST" enctype="multipart/form-data">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img
                                    src="<?php echo !empty($profile['image']) ? '/' . $profile['image'] : '/Views/assets/img/avatars/1.png'; ?>"
                                    alt="user-avatar"
                                    class="d-block rounded"
                                    height="100"
                                    width="100"
                                    id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input
                                            type="file"
                                            id="upload"
                                            name="image"
                                            class="account-file-input"
                                            hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <p class="text-muted mb-0">Allowed JPG or PNG. Max size of 2MB</p>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="<?php echo htmlspecialchars($profile['name'] ?? ''); ?>"
                                        required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="username"
                                        name="username"
                                        value="<?php echo htmlspecialchars($profile['username'] ?? ''); ?>"
                                        required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        class="form-control"
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="<?php echo htmlspecialchars($profile['email'] ?? ''); ?>"
                                        required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        value="<?php echo htmlspecialchars($profile['phone'] ?? ''); ?>" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Gender</label>
                                    <div class="form-check mt-3">
                                        <input
                                            name="gender"
                                            class="form-check-input"
                                            type="radio"
                                            value="male"
                                            id="male"
                                            <?php echo ($profile['gender'] ?? '') === 'male' ? 'checked' : ''; ?> />
                                        <label class="form-check-label" for="male"> Male </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                            name="gender"
                                            class="form-check-input"
                                            type="radio"
                                            value="female"
                                            id="female"
                                            <?php echo ($profile['gender'] ?? '') === 'female' ? 'checked' : ''; ?> />
                                        <label class="form-check-label" for="female"> Female </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
</div>
<!-- Content wrapper -->
<?php
require_once 'c:\Users\Panha.Nhean\Desktop\VC1-G10\Databases\database.php';

class ProfileModel {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function updateUserProfile($data) {
        try {
            $stmt = $this->pdo->prepare("UPDATE users SET username = ?, email = ?, phone = ?, gender = ?, role_id = ? WHERE id = ?");
            return $stmt->execute([
                $data['username'],
                $data['email'],
                $data['phone'],
                $data['gender'],
                $data['role_id'],
                $data['user_id']
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getProfileByAdminId($admin_id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$admin_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function updateProfile($data, $admin_id, $image_path = null) {
        try {
            $sql = "UPDATE users SET name = ?, username = ?, email = ?, phone = ?, gender = ?";
            if ($image_path) {
                $sql .= ", image = ?";
                $params = [$data['name'], $data['username'], $data['email'], $data['phone'], $data['gender'], $image_path, $admin_id];
            } else {
                $params = [$data['name'], $data['username'], $data['email'], $data['phone'], $data['gender'], $admin_id];
            }
            $sql .= " WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>

