<?php
/**
 * This is the information for a User class.
 */
class User implemnets {
	use ValidataUuid;
	/**
	 * id for this user who owns the account; this is the primary key.
	 * @var Uuid $userId
	 */
	private $userId;
	/**
	 * email for this user.
	 */
	private $userEmail;
	/**
	 * constructor for this user.
	 *
	 * @param Uuid|string $newUserId string contains the Id for this user.
	 * @param string $newUserEmail contains the email for this user.
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data type values are out of bounds.
	 * @throws \TypeError if a data type violates a data hints.
	 * @throws \Exception if some other exceptions occur.
	 */
	public function __construct($newUserId, string $newUserEmail) {
		try {
			$this->setUserId($newUserId);
			$this->setUserEmail($newUserEmail);
		} catch (\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
	/**
	 * accessor method for the Uuid | string user Id
	 * @return Uuid value for user id
	 */
	public function getUserId(): Uuid {
		return ($this->authorId);
	}
	/**
	 * mutator method for the Uuid | string user Id
	 *
	 * @param Uuid|string $newUserId new value for this user id
	 * @throws \RangeException if $newUserId is not positive
	 * @throws \TypeError if $newUserId is not a uuid or a string
	 */
	public function setUserId($newUserId): void {
		try {
			$uuid = self::validateUuid($newUserId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			$throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		$this->userId = $uuid;
	}
	/**
	 * accessor method for the string user email
	 * @return string value of the user email
	 */
	public function getUserEmail(): string {
		return($this->userEmail);
	}
	/**
	 * mutator method for user email.
	 *
	 * @param string $newUserEmail new value of user email
	 * @throws \InvalidArgumentException if $newUserEmail is not a string and secure
	 * @throws \RangeException if $newUserEmail is > 128 characters
	 * @throws \TypeError if $newUserEmail is not a string
	 */
	public function setUserEmail(string $newUserEmail) : void {
		$newUserEmail = trim($newUserEmail);
		$newUserEmail = filter_var($newUserEmail, FILTER_VALIDATE_EMAIL);
		if(empty($newUserEmail) === true) {
			$throw(new \InvalidArgumentException("user email is too large"));
		}
		$this->userEmail = $newUserEmail;
	}
}

private
?>